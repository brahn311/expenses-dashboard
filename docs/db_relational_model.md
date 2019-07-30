# condominium

condominio
	id
	edificio
	rif

torres
	id
	nombre
	condominio_id

pisos
	id
	numero
	torre_id

alicuotas
	id
	alicuota

tipos_inmuebles
	id
	description
	alicuota_id

inmuebles
	id
	piso_id
	tipo_inmueble_id

# peoples

tipos_documentos
	id
	simbolo
	nombre

personas
	id
	primer_nombre
	segundo_nombre
	tipo_documento_id
	documento

emails
	id
	persona_id
	direccion

telefonos
	id
	persona_id
	numero

propietarios
	id
	persona_id
	inmueble_id

miembros
	id
	condominio_id
	propietario_id

# cuentas

monedas
	id
	nombre
	simbolo

precios_monedas
	id
	base_moneda_id
	valor
	moneda_id

accounts_types
	id
	name

accounts
	id
	alias
	account_type_id
	moneda_id

transaction
	id
	account_id
	date
	ref
	description
	amount

# Gastos

#### Periodos:

periods
-	id
-	name
-	start_date
-	end_date

#### Pagos periodicos:
Listado de pagos que se deben hacer por cada periodo
Para autollenar los pagos

periodic_expenses
-	id
-	provider
-	description
-	payment_date

#### Tipo de gastos:

| Nombre           | Clasificacion de los gastos             |
|----------------|-----------------------------------------|
| **fijos**      | aplicados por igual entre los inmuebles |
| **comunes**    | aplicados segun alicuotas  inmuebles    |
| **especiales** | aplicados a inmueble especifico         |

expenses_types
-	id
-	name
-	description

#### Gastos
- Un gasto posee muchas transacciones?
- Una transacción posee muchos gastos?

expenses
-	id
-	expense_type_id
-	document
-	issue_date
-	due_date
-	description
-	amount

#### Pagos: (incompleto)
Es la co-relacion entre una transacción y un gasto

payments (manytomany)
-	id
-	expense_id
-	transaction_id

#### Cobranzas:
- Una transaccion puede relacionarse con varios pagos a varios inmuebles distintos
- El monto debe ser siempre positivo (porque es un pago)
- El monto no debe ser superior al monto de la transacción

collections
-	id
-	transaccion_id
-	inmueble_id
-	previous_balance
-	amount
-	balance

#### Intereses ????
