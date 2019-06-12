
#term = "abajar"



file = open('listado-general.txt')
for line in file:
    line.strip().split('/n')
    if line.startswith('abaja'):
        print (line)

       # break

#else:

 #   print("Palabra no encontrada")

file.close()

