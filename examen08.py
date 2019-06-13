#Escriba un codigo que le permita al usuario ingresar una palabra y el codigo busque palabras relacionadas en un archivo de texto, para mostrarsela al usuario.



def buscadorpalabras(datos):
 #   datos = str(input("Favor ingrese una palabra que sea buscar: "))

    file = open('listado-general.txt')
    for y in file:
        y.strip().split('/n')
        if y.startswith(datos):
            print(y)

    file.close()




datos = str(input("Favor ingrese una palabra que sea buscar: "))
buscadorpalabras(datos)