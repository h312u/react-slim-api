Server / Backend

Jalankan :

### `composer install`

tunggu sampai selesai, kemudian jalankan :

### `./run.sh`
jika menggunakan linux

atau

### `run.bat`
jika menggunakan windows

Open [http://localhost:8080/?key=123456] to view it in the browser.

API
view : GET - [http://localhost:8080/goods/?key=123456]
Input : POST - [http://localhost:8080/goods/?key=123456]
	`body : 
		{
			"name": "kaos kaki",
			"price": "10000"
		}`
Update : PUT : [http://localhost:8080/goods/3?key=123456]
	`body : 
		{
			"name": "kaos kaki",
			"price": "10000"
		}`
Delete : DEL : [http://localhost:8080/goods/3?key=123456]

----------------------------------------------------

Frontend

Jalankan :

### `npm install`

kemudian jalankan :

### `npm start`

Open [http://localhost:3000[ to view it in the browser.
