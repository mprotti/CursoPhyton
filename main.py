#Dependencias
import os
import sqlite3
from flask import Flask, render_template, request, session, escape
from flask import render_template, request, redirect, url_for, g
from flask_sqlalchemy import SQLAlchemy
from werkzeug.security import generate_password_hash, check_password_hash
from flask_mail import Mail, Message

#Configuracion general del software
app = Flask(__name__)
app.config['DEBUG'] = True

#Configuracion del email
app.config.update(
    DEBUG = True,
    MAIL_SERVER = 'smtp.gmail.com',
    MAIL_PORT = 465,
    MAIL_USE_TLS = False,
    MAIL_USE_SSL = True,
    MAIL_USERNAME = 'masterlist.suppliers@gmail.com',
    MAIL_PASSWORD = 'Celeste:801020363',

)
mail = Mail(app)

#Configuracion para update file
APP_ROOT = os.path.dirname(os.path.abspath(__file__))
app.config['UPLOAD_FOLDER'] = './Archivos PDF'


#Base de datos login de user
dbdir = "sqlite:///" + os.path.abspath(os.getcwd()) + "/database.db"
DATABASE = "data.db"
app.config["SQLALCHEMY_DATABASE_URI"] = dbdir
app.config["SQLALCHEMY_TRACK_MODIFICATIONS"] = False
db = SQLAlchemy(app)

class Users(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(50), unique=True, nullable=False)
    password = db.Column(db.String(80), nullable=False)

# Gestión de la base de datos proveedores
def get_db():
    db = getattr(g, '_database', None)
    if db is None:
        db = g._database = sqlite3.connect(DATABASE)
        db.row_factory = sqlite3.Row
    return db

def query_db(query, args=(), one=False):
    cur = get_db().execute(query, args)
    rv = cur.fetchall()
    cur.close()
    return (rv[0] if rv else None) if one else rv

def change_db(query,args=()):
    cur = get_db().execute(query, args)
    get_db().commit()
    cur.close()

@app.teardown_appcontext
def close_connection(exception):
    db = getattr(g, '_database', None)
    if db is not None:
        db.close()



#Proveedr llena formulario
@app.route('/selecionar3', methods=['GET', 'POST'])
def selecionar3():

    if request.method == "GET":
        return render_template("forms/selecionar3.html",contact=None)

    if request.method == "POST":
        contact=request.form.to_dict()
        values=[contact['company'],contact['phone'],contact['mail'],contact['adress'],contact['city'],contact['country'],contact['website'],contact['industry'],contact['description'],contact['transportemedio'],contact['transportequimicos'],contact['managername'],contact['manageremail'],contact['managerphone'],contact['calidadname'],contact['calidademail'],contact['calidadphone'],contact['finanzasname'],contact['finanzasemail'],contact['finanzasphone'],contact['salename'],contact['saleemail'],contact['salephone'],contact['cuentaname'],contact['cuentaswift'],contact['cuentaaba'],contact['cuentanumber'],contact['cuentaaba'],contact['cuentaaddress'],contact['certificados'],contact['certificadoscomentarios'],contact['certificadocumplimiento'],contact['tiemporegistros'],contact['trazabilidad'],contact['datevencimiento'],contact['attach'],contact['attach2'],contact['attach3']]
        change_db("INSERT INTO contact (company,phone,mail,adress,city,country,website,industry,description,transportemedio,transportequimicos,managername,manageremail,managerphone,calidadname,calidademail,calidadphone,finanzasname,finanzasemail,finanzasphone,salename,saleemail,salephone,cuentaname,cuentaswift,cuentaaba,cuentanumber,cuentaaba,cuentaaddress,certificados,certificadoscomentarios,certificadocumplimiento,tiemporegistros,trazabilidad,datevencimiento,attach,attach2,attach3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",values)
        return redirect(url_for("redifinal"))


@app.route('/selecionar22', methods=['GET', 'POST'])
def selecionar22():

    if request.method == "GET":
        return render_template("forms/selecionar22.html",contact=None)

    if request.method == "POST":
        contact=request.form.to_dict()
        values=[contact['company'],contact['phone'],contact['mail'],contact['adress'],contact['city'],contact['country'],contact['website'],contact['industry'],contact['description'],contact['managername'],contact['manageremail'],contact['managerphone'],contact['finanzasname'],contact['finanzasemail'],contact['finanzasphone'],contact['salename'],contact['saleemail'],contact['salephone'],contact['cuentaname'],contact['cuentaswift'],contact['cuentaaba'],contact['cuentanumber'],contact['cuentaaba'],contact['cuentaaddress']]
        change_db("INSERT INTO contact (company,phone,mail,adress,city,country,website,industry,description,managername,manageremail,managerphone,finanzasname,finanzasemail,finanzasphone,salename,saleemail,salephone,cuentaname,cuentaswift,cuentaaba,cuentanumber,cuentaaba,cuentaaddress) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",values)
        return redirect(url_for("redifinal"))


@app.route('/select3', methods=['GET', 'POST'])
def select3():

    if request.method == "GET":
        return render_template("forms/select3.html",contact=None)

    if request.method == "POST":
        contact=request.form.to_dict()
        values=[contact['company'],contact['phone'],contact['mail'],contact['adress'],contact['city'],contact['country'],contact['website'],contact['industry'],contact['description'],contact['transportemedio'],contact['transportequimicos'],contact['managername'],contact['manageremail'],contact['managerphone'],contact['calidadname'],contact['calidademail'],contact['calidadphone'],contact['finanzasname'],contact['finanzasemail'],contact['finanzasphone'],contact['salename'],contact['saleemail'],contact['salephone'],contact['cuentaname'],contact['cuentaswift'],contact['cuentaaba'],contact['cuentanumber'],contact['cuentaaba'],contact['cuentaaddress'],contact['certificados'],contact['certificadoscomentarios'],contact['certificadocumplimiento'],contact['tiemporegistros'],contact['trazabilidad'],contact['datevencimiento'],contact['attach'],contact['attach2'],contact['attach3']]
        change_db("INSERT INTO contact (company,phone,mail,adress,city,country,website,industry,description,transportemedio,transportequimicos,managername,manageremail,managerphone,calidadname,calidademail,calidadphone,finanzasname,finanzasemail,finanzasphone,salename,saleemail,salephone,cuentaname,cuentaswift,cuentaaba,cuentanumber,cuentaaba,cuentaaddress,certificados,certificadoscomentarios,certificadocumplimiento,tiemporegistros,trazabilidad,datevencimiento,attach, attach2,attach3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",values)
        return redirect(url_for("redifinal"))


@app.route('/select22', methods=['GET', 'POST'])
def select22():

    if request.method == "GET":
        return render_template("forms/select22.html",contact=None)

    if request.method == "POST":
        contact=request.form.to_dict()
        values=[contact['company'],contact['phone'],contact['mail'],contact['adress'],contact['city'],contact['country'],contact['website'],contact['industry'],contact['description'],contact['managername'],contact['manageremail'],contact['managerphone'],contact['finanzasname'],contact['finanzasemail'],contact['finanzasphone'],contact['salename'],contact['saleemail'],contact['salephone'],contact['cuentaname'],contact['cuentaswift'],contact['cuentaaba'],contact['cuentanumber'],contact['cuentaaba'],contact['cuentaaddress']]
        change_db("INSERT INTO contact (company,phone,mail,adress,city,country,website,industry,description,managername,manageremail,managerphone,finanzasname,finanzasemail,finanzasphone,salename,saleemail,salephone,cuentaname,cuentaswift,cuentaaba,cuentanumber,cuentaaba,cuentaaddress) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",values)
        return redirect(url_for("redifinal"))

#Notificaciones
@app.route ('/redifinal')
def redifinal():
   msg = Message('Nuevo proveedor registrado', sender = 'masterlist.suppliers@gmail.com', recipients = ['najerarodriguez04@gmail.com'])
   msg.body = "Saludos, se registro un nuevo proveedor. En la prueba no se adjunta la informacion del nuevo proveedor"
   mail.send(msg)
   return render_template("inicio/redifinal.html")


#Login and signup
@app.route("/signup", methods=["GET", "POST"])
def signup():
    if request.method == "POST":
        hashed_pw = generate_password_hash(request.form["password"], method="sha256")
        new_user = Users(username=request.form["username"], password=hashed_pw)
        db.session.add(new_user)
        db.session.commit()

        return "You've registered successfully."

    return render_template("user/signup.html")

@app.route("/", methods=["GET", "POST"])
def login():
    if request.method == "POST":
        user = Users.query.filter_by(username=request.form["username"]).first()

        if user and check_password_hash(user.password, request.form["password"]):
            session["username"] = user.username
            return render_template("user/redi.html")
        return render_template("user/loginerror.html")


    return render_template("user/login.html")

@app.route("/loginerror", methods=["GET", "POST"])
def loginerror():
    if request.method == "POST":
        user = Users.query.filter_by(username=request.form["username"]).first()

        if user and check_password_hash(user.password, request.form["password"]):
            session["username"] = user.username
            return render_template("user/redi.html")
        return render_template("user/loginerror.html")

    return render_template("user/login.html")

@app.route("/logout")
def logout():
    session.pop("username", None)
    return render_template("user/login.html")



#Sesion de usuario de compras
@app.route('/new')
def new():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("conta/nuevo.html",contact_list=contact_list)
    return render_template("user/login.html")


@app.route('/pendiente')
def pendiente():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("conta/pendiente.html",contact_list=contact_list)
    return render_template("user/login.html")

@app.route('/contabilidad')
def contabilidad():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("reportes.html",contact_list=contact_list)
    return render_template("user/login.html")

@app.route('/archivar')
def archivar():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("conta/archivar.html",contact_list=contact_list)
    return render_template("user/login.html")


@app.route('/facturar')
def facturar():
    if "username" in session:
        if request.method == "GET":
            return render_template("forms/facturar.html",contact=None)

        if request.method == "POST":
            contact=request.form.to_dict()
            values=[contact['emisor'],contact['phone'],contact['mail'],contact['adress'],contact['identificacion'],contact['fechaemision'],contact['receptor'],contact['direccionreceptor'],contact['identificacionreceptor'],contact['condicionventa'],contact['mediopago'],contact['clavenumerica'],contact['cantidad'],contact['cantidad1'],contact['cantidad2'],contact['cantidad3'],contact['cantidad4'],contact['cantidad5'],contact['unidad'],contact['unidad1'],contact['unidad2'],contact['unidad3'],contact['unidad4'],contact['unidad5'],contact['detalle'],contact['detalle1'],contact['detalle2'],contact['detalle3'],contact['detalle4'],contact['detalle5'],contact['precio'],contact['precio1'],contact['precio2'],contact['precio3'],contact['precio4'],contact['precio5'],contact['total'],contact['status'],contact['emailreceptor'],contact['phonereceptor']]
            change_db("INSERT INTO contact (emisor,phone,mail,adress,identificacion,fechaemision,receptor,direccionreceptor,identificacionreceptor,mailreceptor,phonereceptor,condicionventa,mediopago,clavenumerica,cantidad,cantidad1,cantidad2,cantidad3,cantidad4,cantidad5,unidad,unidad1,unidad2,unidad3,unidad4,unidad5,detalle,detalle1,detalle2,detalle3,detalle4,detalle5,precio,precio1,precio2,precio3,precio,precio5,total,status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",values)
            return redirect(url_for("dashboard"))
    return render_template("user/login.html")


@app.route('/debito')
def debito():
    if "username" in session:
        if request.method == "GET":
            return render_template("forms/formulario22.html",contact=None)

        if request.method == "POST":
            contact=request.form.to_dict()
            values=[contact['company'],contact['phone'],contact['mail'],contact['adress'],contact['city'],contact['country'],contact['website'],contact['industry'],contact['description'],contact['transportemedio'],contact['transportequimicos'],contact['managername'],contact['manageremail'],contact['managerphone'],contact['calidadname'],contact['calidademail'],contact['calidadphone'],contact['finanzasname'],contact['finanzasemail'],contact['finanzasphone'],contact['salename'],contact['saleemail'],contact['salephone'],contact['cuentaname'],contact['cuentaswift'],contact['cuentaaba'],contact['cuentanumber'],contact['cuentaaba'],contact['cuentaaddress'],contact['certificados'],contact['certificadoscomentarios'],contact['certificadocumplimiento'],contact['tiemporegistros'],contact['trazabilidad'],contact['attach']]
            change_db("INSERT INTO contact (company,phone,mail,adress,city,country,website,industry,description,transportemedio,transportequimicos,managername,manageremail,managerphone,calidadname,calidademail,calidadphone,finanzasname,finanzasemail,finanzasphone,salename,saleemail,salephone,cuentaname,cuentaswift,cuentaaba,cuentanumber,cuentaaba,cuentaaddress,certificados,certificadoscomentarios,certificadocumplimiento,tiemporegistros,trazabilidad,attach) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",values)
            return redirect(url_for("dashboard"))
    return render_template("user/login.html")

@app.route('/credito')
def credito():
    if "username" in session:
        if request.method == "GET":
            return render_template("forms/formulario22.html",contact=None)

        if request.method == "POST":
            contact=request.form.to_dict()
            values=[contact['company'],contact['phone'],contact['mail'],contact['adress'],contact['city'],contact['country'],contact['website'],contact['industry'],contact['description'],contact['transportemedio'],contact['transportequimicos'],contact['managername'],contact['manageremail'],contact['managerphone'],contact['calidadname'],contact['calidademail'],contact['calidadphone'],contact['finanzasname'],contact['finanzasemail'],contact['finanzasphone'],contact['salename'],contact['saleemail'],contact['salephone'],contact['cuentaname'],contact['cuentaswift'],contact['cuentaaba'],contact['cuentanumber'],contact['cuentaaba'],contact['cuentaaddress'],contact['certificados'],contact['certificadoscomentarios'],contact['certificadocumplimiento'],contact['tiemporegistros'],contact['trazabilidad'],contact['attach']]
            change_db("INSERT INTO contact (company,phone,mail,adress,city,country,website,industry,description,transportemedio,transportequimicos,managername,manageremail,managerphone,calidadname,calidademail,calidadphone,finanzasname,finanzasemail,finanzasphone,salename,saleemail,salephone,cuentaname,cuentaswift,cuentaaba,cuentanumber,cuentaaba,cuentaaddress,certificados,certificadoscomentarios,certificadocumplimiento,tiemporegistros,trazabilidad,attach) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",values)
            return redirect(url_for("dashboard"))
    return render_template("user/login.html")


@app.route('/perfil')
def perfil():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("build.html",contact_list=contact_list)
    return render_template("user/login.html")

@app.route('/todas')
def todas():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("conta/todas.html",contact_list=contact_list)
    return render_template("user/login.html")

@app.route('/notificaciones')
def notificaciones():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("build.html",contact_list=contact_list)
    return render_template("user/login.html")

@app.route('/dashboard')
def dashboard():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")
        return render_template("conta/dashboard.html",contact_list=contact_list)
    return render_template("user/login.html")


@app.route('/reportes')
def reportes():
    if "username" in session:
        contact_list=query_db("SELECT * FROM contact")

        return render_template("reportes.html",contact_list=contact_list)
    return render_template("user/login.html")



@app.route('/update/<int:id>', methods=['GET', 'POST'])
def udpate(id):
    if "username" in session:
        if request.method == "GET":
            contact=query_db("SELECT * FROM contact WHERE id=?",[id],one=True)
            return render_template("update.html",contact=contact)

        if request.method == "POST":

            print(request.form)
            contact=request.form.to_dict()
            print(contact)
            values=[contact['status'],contact['company'],contact['phone'],contact['mail'],contact['adress'],contact['city'],contact['country'],contact['website'],contact['industry'],contact['description'],contact['transportemedio'],contact['transportequimicos'],contact['managername'],contact['manageremail'],contact['managerphone'],contact['calidadname'],contact['calidademail'],contact['calidadphone'],contact['finanzasname'],contact['finanzasemail'],contact['finanzasphone'],contact['salename'],contact['saleemail'],contact['salephone'],contact['cuentaname'],contact['cuentaswift'],contact['cuentaaba'],contact['cuentanumber'],contact['cuentaaba'],contact['cuentaaddress'],contact['certificados'],contact['certificadoscomentarios'],contact['certificadocumplimiento'],contact['tiemporegistros'],contact['trazabilidad'],contact['attach'],id]
            change_db("UPDATE contact SET status=?,company=?,phone=?,mail=?,adress=?,city=?,country=?,website=?,industry=?,description=?,transportemedio=?,transportequimicos=?,managername=?,manageremail=?,managerphone=?,calidadname=?,calidademail=?,calidadphone=?,finanzasname=?,finanzasemail=?,finanzasphone=?,salename=?,saleemail=?,salephone=?,cuentaname=?,cuentaswift=?,cuentaaba=?,cuentanumber=?,cuentaaba=?,cuentaaddress=?,certificados=?,certificadoscomentarios=?,certificadocumplimiento=?,tiemporegistros=?,trazabilidad=?,attach=? WHERE ID=?",values)
            return redirect(url_for("dashboard"))
    return render_template("user/login.html")

@app.route('/view/<int:id>', methods=['GET', 'POST'])
def view(id):
    if "username" in session:
        if request.method == "GET":
            contact=query_db("SELECT * FROM contact WHERE id=?",[id],one=True)
            return render_template("view.html",contact=contact)


    return render_template("user/login.html")



@app.route('/delete/<int:id>', methods=['GET', 'POST'])
def delete(id):
    if "username" in session:
        if request.method == "GET":
            contact=query_db("SELECT * FROM contact WHERE id=?",[id],one=True)
            return render_template("delete.html",contact=contact)

        if request.method == "POST":
            change_db("DELETE FROM contact WHERE id = ?",[id])
            return redirect(url_for("dashboard"))
    return render_template("user/login.html")

@app.route("/index")
def index():
    return render_template("index.html")


app.secret_key = "12345"


if __name__ == "__main__":
    db.create_all()
    app.run(debug=True)