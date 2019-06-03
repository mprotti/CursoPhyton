detonador = 1
usuarios = ["Ana", "Marcelo", "Carlos"]

while detonador > 0:
    usuarios.append (input ("agregar usuarios"))
    detonador = detonador - 1
    for nombres in usuarios:
        print (nombres)


