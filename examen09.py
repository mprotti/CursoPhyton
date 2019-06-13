
def Menu():
    print("""*******
    Calculadora
    ****
    Menu
    1) Suma
    2) Resta
    3) Multiplicacion
    4) Division
    """)

def Calculadora():
    Menu()
    opc = int(input("Seleccion Opcion \n"))
    while (opc > 0 and opc <5):

        try:
            x = int(input("Ingrese Numero\n"))
            y = int(input("Ingrese otro numero\n"))
        except ValueError:
            print('Valord invalido, ingrese unicamente enteros')
            opc = 0

        if (opc == 0):
            Calculadora()

        if (opc == 1):

            print("La suma es: ", x + y)
            opc = int(input("Seleccione Opcion"))

        elif (opc == 2):
            print("La resta es:", x - y)
            opc = int(input("Seleccione Opcion"))
        elif (opc == 3):
            print("La multiplicacion es:", x * y)
            opc = int(input("Seleccione Opcion"))

        elif (opc == 4):
            try:
                print("La division es: ", x / y)
                opc = int(input("Seleccione Opcion"))
            except ZeroDivisionError:
                print("No se permite la division entre 0")
                opc = int(input("Seleccione Opcion"))


Calculadora()
