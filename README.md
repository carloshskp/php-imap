
# php-imap  
  
This package can connect to imap servers.  
  
## Summary  
  
- [Basic Usage](#basic-usage)  
- [Client::class](#client-class)  
- [Folder::class](#folder-class)  
- [Message::class](#message-class)  
- [Attachment::class](#attachment-class)  
  
## Basic Usage
```php
use Carloshb\Imap\Client;

$client = new Client();
$client->connect([
	'username' => 'a@a.com',
	'password' => 'myimappassword',
	'hostname' => 'localhost', // default
	'port' => 993, // default
]);

$folders = $client->getFolders(); // ['Inbox', 'Sent', 'Trash', ...]

$folder = $client->getFolder('Inbox'); // Folder::class

$messages = $folder->getMessages(); // [Message::class, Message::class, ...]

$message = $folder->getMessage(1); // Message:class

$message->getSubject(); // subject as a string
```
  
## Client Class
[not implemented] 

### Methods
#### connect
This method defines the connection. If success gets `true`, if it doesn't get `false`
```php
public function connect(array $options = [
	'username' => 'a@a.com',
	'password' => 'myimappassword',
	'hostname' => 'localhost', // default
	'port' => 993, // default
]) : bool;
```

```php
public function getFolders() : [Folder, Folder, ...];
```

```php
public function getFolder(string $folder) : Folder || \Exception;
```

## Folder Class
[not implemented] 

### Iterate folders
```php
$folders = $client->getFolders();

foreach($folders as $folder) {
	[...]
}
```
  
## Message Class
[not implemented] 

### Iterate messages

```php
$messages = $folder->getMessages();

foreach($messages as $message) {
	[...]
}
```
  
## Attachment Class
[not implemented]

### Iterate attachments

```php
$attachments = $message->getAttachments();

foreach($attachments as $attachment) {
	[...]
}
```