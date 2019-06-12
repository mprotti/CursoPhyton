#Importa modulo pickle
import pickle

#Declara lista
lista = ['Perl', 'Python', 'Ruby']

#abre archivo binario para escribir
archivo = open('lenguajes.dat', 'wb')

#escribe lista en archivo
pickle.dump(lista, archivo)

#cierra archivo
archivo.close

#borra de la memoria la lista
del lista

#arbre archivo binario para leer
archivo = open('lenguajes.dat', 'rb')

#carga lista desde archivo
lista = pickle.load(archivo)

#muestra lista
print(lista)

#cierra archivo
archivo.close

