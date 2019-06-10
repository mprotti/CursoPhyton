


#operacion = str(input("Ingrese la operacion que desea realizar, suma(s) o resta(r):"))

while True:

    operacion = str(input("Ingrese la operacion que desea realizar, suma(s), resta(r), multiplicar(m) o dividir(d):"))

    if (operacion == "s") or (operacion == "r") or (operacion == "m") or (operacion == "d"):


         if operacion == "s" :
            print("Ingrese los valores que dea sumar:")
            a  = int(input("Ingrese el primer valor:" ))
            b = int(input("Ingrese el segundo valor:"))
            suma = a+b
            print("El resultado es: %s" %suma)
            break

         elif operacion == "r":

            print("Ingrese los valores que desea restar")
            c = int(input("Ingrese el primer valor:"))
            d = int(input("Ingrese el segundo valor:"))
            resta = c - d
            print("El resultado es: %s" %resta)
            break

         elif operacion == "m":
             print("Ingrese los valores que desea multiplicar")
             e = int(input("Ingrese el primer valor:"))
             f = int(input("Ingrese el segundo valor:"))
             multiplicacion = e*f
             print("El resultado es: %s" % multiplicacion)
             break

         elif operacion == "d":

             print("Ingrese los valores que desea dividir")
             x = int(input("Ingrese el primer valor:"))
             y = int(input("Ingrese el segundo valor:"))
             division = x / y
             print("El resultado es: %s" % division)
             break

    else:

        print("Valor incorrecto. Presione 's' para Suma, 'r' para restar, 'm' para multiplicar o 'd' para dividir!" )

