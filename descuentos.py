import random


descuentos = {'blanco': 0, 'rojo' : 0.13, 'amarillo' : 0.25, 'azul' : 0.50 }

compras = int(input ( "Ingrese la cantidad del compras:" ))

def rifaDescuento(monto):
    color, descuento = random.choice(list(descuentos.items()))
    #print (color, descuento)
    print (" Tiene un descuento de %s " % color, descuento)
    nuevomonto = monto + monto*descuento
    print (" Ahora debe pagar un total de %s " % nuevomonto)

   # print ("Usted merece un descuento de" , rifa)

if compras >= 100:
    rifaDescuento(compras)


if compras < 100:
    print("Usted no aplica para el descuento")
    print("Usted debe pagar %s " % compras)

elif compras == 0:
    print("Valor invalido")



