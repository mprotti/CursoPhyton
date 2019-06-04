

edad = int(input ("Ingrese su edad: "))
mayoriadedad = 18
edadmax = 100


if edad >= 100 :
    print ("Usted deberia ser muy viejo")

elif edad > mayoriadedad :
    print ("Usted es mayor de edad")

elif edad == 0:
    print ("Valor incorrecto")

else :
    print ("Usted es menor de edad")