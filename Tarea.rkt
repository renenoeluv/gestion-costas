#lang play

(deftype F1WAE 
  (w-num n)
  (w-id x)
  (w->= l r)
  (w-> l r)
  (w-bool b)
  (w-or l r)
  (w-not l)
  (w-< l r)
  (w-<= l r)
  (w-add l r)
  (w-sub l r)
  (w-and l r)
  (w-= l r)
  (w-with name named-expr body)
  (w-app fun-name arg)
  (w-if c t e)
  (w-ifb c t e))


(define (parse-wae s)
  (cond
    [(number? s) (w-num s)]
    [(boolean? s) (w-bool s)]
    [(list? s)
     (match (first s)
       ['+ (w-add (parse-wae (second s))
                  (parse-wae (third s)))]
       ['- (w-sub (parse-wae (second s))
                  (parse-wae (third s)))]
       ['and (w-and (parse-wae (second s))
                  (parse-wae (third s)))]
       ['or (w-or (parse-wae (second s))
                  (parse-wae (third s)))]
       ['not (w-not (parse-wae (second s)))]
       ['= (w-= (parse-wae (second s))
                  (parse-wae (third s)))]
       ['>= (w->= (parse-wae (second s))
                  (parse-wae (third s)))]
       ['< (w-< (parse-wae (second s))
                  (parse-wae (third s)))]
       ['<= (w-<= (parse-wae (second s))
                  (parse-wae (third s)))]
       ['> (w-> (parse-wae (second s))
                  (parse-wae (third s)))]
       ['with (w-with (first (second s))
                      (parse-wae
                       (second (second s)))
                      (parse-wae (third s)))]
       ['if {w-if (parse-wae (second s))
                  (parse-wae (third s))
                  (parse-wae (fourth s))}]
       ['ifb {w-ifb (parse-wae (second s))
                  (parse-wae (third s))
                  (parse-wae (fourth s))}]
       [else (w-app (first s) (parse-wae (second s)) )])]    
    [else (w-id s)]))

(define (interp-wae expr funs)
  (match expr
    [(w-num n) n]
    [(w-bool b) b]
    [(w-add l r) (+ (interp-wae l funs) (interp-wae r funs))]
    [(w-sub l r) (- (interp-wae l funs) (interp-wae r funs))]
    [(w-and l r) (and (interp-wae l funs) (interp-wae r funs))]
    [(w-or l r) (or (interp-wae l funs) (interp-wae r funs))]
    [(w-< l r) (< (interp-wae l funs) (interp-wae r funs))]
    [(w-<= l r) (<= (interp-wae l funs) (interp-wae r funs))]
    [(w-= l r) (= (interp-wae l funs) (interp-wae r funs))]
    [(w->= l r) (>= (interp-wae l funs) (interp-wae r funs))]
    [(w-> l r) (> (interp-wae l funs) (interp-wae r funs))]
    [(w-not l) (not (interp-wae l funs))]
    [(w-id x) (error "Identificador no definido")]
    [(w-if c t e)
     (if (= 0 (interp-wae c funs))
         (interp-wae t funs)
         (interp-wae e funs))]
    [(w-ifb c t e)
     (if (equal? #t (interp-wae c funs))
         (interp-wae t funs)
         (interp-wae e funs))]  
    [(w-with name named-expr body)
     (interp-wae
      (let ([named-value (interp-wae named-expr funs)])
        (subst body name (if (number? named-value) (w-num named-value) (w-bool named-value)))) funs)]
    [(w-app fun-name arg)
     (let ([def-fun (assoc fun-name funs)])
       (if def-fun
           (let ([arg-name (first (second def-fun))]
                 [fun-body (parse-wae (third def-fun))])
             (interp-wae
              (let ([named-value (interp-wae arg funs)])
                (subst fun-body arg-name (if (number? named-value) (w-num named-value) (w-bool named-value))))
              funs))
           (error "funcion no encontrada" fun-name)))]))


(define (subst body name named-value)
  (match body
    [(w-num n) (w-num n)]
    [(w-bool b) (w-bool b)]
    [(w-add l r) (w-add (subst l name named-value)
                        (subst r name named-value))]
    [(w-sub l r) (w-sub (subst l name named-value)
                        (subst r name named-value))]
    [(w-and l r) (w-and (subst l name named-value)
                        (subst r name named-value))]
    [(w-or l r) (w-or (subst l name named-value)
                        (subst r name named-value))]
    [(w-= l r) (w-= (subst l name named-value)
                        (subst r name named-value))]
    [(w->= l r) (w->= (subst l name named-value)
                        (subst r name named-value))]
    [(w-> l r) (w-> (subst l name named-value)
                        (subst r name named-value))]
    [(w-not l) (w-not (subst l name named-value))]
    [(w-< l r) (w-< (subst l name named-value)
                        (subst r name named-value))]
    [(w-<= l r) (w-<= (subst l name named-value)
                        (subst r name named-value))]
    [(w-id x)
     (if (equal? x name)
         named-value
         (w-id x))]
    [(w-if c t e) (w-if (subst c name named-value)
                        (subst t name named-value)
                        (subst e name named-value))]
    [(w-ifb c t e) (w-ifb (subst c name named-value)
                        (subst t name named-value)
                        (subst e name named-value))]
    [(w-with name2 named-expr2 body2)
     (if (equal? name2 name)
         (w-with name2
                 (subst named-expr2 name named-value)
                 body2)
         (w-with name2
                 (subst named-expr2 name named-value)
                 (subst body2 name named-value)))]
    [(w-app fun-name arg) (w-app fun-name (subst arg name named-value))]))

