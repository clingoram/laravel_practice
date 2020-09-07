<form action="/management" method ="POST">
    @csrf
    <input type="checkbox" id="switch_status" name="switch_value"/>
    <label for="switch">Toggle</label>
    <input type="submit">
</form>