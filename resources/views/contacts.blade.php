@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            <div class="content_bottom">
                <h3>Пишете ни</h3>
                <form>
                    <div class="contact_box1">
                        <input type="text" value="Име" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Име';}" class="text">
                        <input type="email" value="Имейл" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Имейл';}" style="margin-left:3%" class="text">
                        <input type="tel" value="Телефон" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Телефон';}" style="margin-left:3%" class="text">
                    </div>
                    <div class="text_1">
                        <textarea value="Съобщение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Съобщение';}">Съобщение</textarea>
                    </div>
                    <div class="form-submit1 form_but1">
                        <input id="submit" name="submit" type="submit" value="Изпрати"><br>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
