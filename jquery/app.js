
setInterval('loadMessages()', 1000)

function loadMessages(){
    $('#messages').load('load.php')
}