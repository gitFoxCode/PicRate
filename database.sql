Database - 

Users:
*	id: INT AI
	Username: varchar
	Password_hash: varchar
	E-mail: text
	Data: xxxx-yy-zz GG-MM-SS
	Images_count: var
	Avatar: userdata/avatars/php_url
	Admin: true/false

Photos:
*	id: INT AI
	Author: Users->id
	url: userdata/photos/php_url
	Data: xxxx-yy-zz GG-MM-SS
	Rate: INT

Comments:
*	id: INT AI
	Author: Users->id
	Photo: Photos->id
	Comment: varchar
	Data: xxxx-yy-zz GG-MM-SS

Banned: 
*	id: INT AI
	User: Users->id
	ip: IPADRESS (45 charakters)
	Data: xxxx-yy-zz GG-MM-SS


	Account: Annonymous