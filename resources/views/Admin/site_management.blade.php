{{-- 網站管理頁面 --}}
<form action="/management" method ="POST">
    {{ csrf_field() }}
    <input type="checkbox" id="switch_status" name="switch_value"/>
    <label for="switch">Toggle</label>
    <input type="submit">
</form>