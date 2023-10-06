<form action={{route('chat.post')}} method="post">
@csrf
    <input type="text" name="message">
    <button type="submit">asdas</button>
</form>