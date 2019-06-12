cadena1 = 'Datos'  #declara cadena1
cadena2 = 'Secretos' #declara a cadena2

#abre archivo para escribir
archivo = open('datos1.txt', 'w')

#escribe cadena1 a;adiendo salto de linea
archivo.write(cadena1 + '\n')

#escribe cadena2 en archivo
archivo.write(cadena2)

#cierra archivo
archivo.close

#declara lista
lista = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes']

# abre archivo en modo escritura
archivo = open('datos2.txt', 'w')

#escribe toda la lista en el archivo

archivo.writelines(lista)

#cierra archivo

archivo.close