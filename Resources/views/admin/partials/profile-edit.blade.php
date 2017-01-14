<div class="row">
    <div class="col-md-3">
        {!! Form::normalInput('title', trans('profile.form.title'), $errors, $user) !!}
    </div>
    <div class="col-md-3">
        {!! Form::normalInput('phone', trans('profile.form.phone'), $errors, $user) !!}
    </div>
    <div class="col-md-3">
        {!! Form::normalInput('language', trans('profile.form.language'), $errors, $user) !!}
    </div>
    <div class="col-md-3">
        {!! Form::normalInput('country', trans('profile.form.country'), $errors, $user) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Form::normalInput('address', trans('profile.form.address'), $errors, $user) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        {!! Form::normalInput('markup', trans('profile.form.markup'), $errors, $user) !!}
    </div>
    <div class="col-md-3">
        {!! Form::normalInput('vat', trans('profile.form.vat'), $errors, $user) !!}
    </div>
    <div class="col-md-3">
        {!! Form::normalInput('currency', trans('profile.form.currency'), $errors, $user) !!}
    </div>
    <div class="col-md-3">
        {!! Form::normalInput('currency_rate', trans('profile.form.currency_rate'), $errors, $user) !!}
    </div>
</div>