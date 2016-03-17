
# webAPI
	webAPI is PHP based API, you send commands to it and it returns json object
	
	for example http://localhost/abcdefghij12356/book/getBook?id=11 means:
		my TOKEN is "abcdefghij123456"
		i want to execute a method named "getBook"
		from class "Book"
		with parameter "id=11"
	
	This will execute on server and return result like:
---
	{
	"format":1,
	"api":1,
	"response":{
		"name":"Artificial Intelligence",
		"price":"1500",
		"desc":"Edition 4",
		"city":"\u062a\u0628\u0631\u06cc\u0632",
		"status":"OPEN"
		}
	}
---
#
>>>>>>> 6529d1c7ea886f46ab1dae93a7fae309bf92e2ef
