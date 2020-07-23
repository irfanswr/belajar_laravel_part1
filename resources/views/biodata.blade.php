<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Multi Bahasa Localization Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="col d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header text-center" >
            <h2>@lang('biodata.welcome')</h2>
            <h4><a href="https://www.malasngoding.com">www.malasngoding.com</a></h4>
        </div>
        <div class="card-body">
            <div class="dropdown d-flex flex-row-reverse">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('biodata.language')
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/en/form">English</a>
                    <a class="dropdown-item" href="/id/form">Indonesia</a>
                </div>
            </div>
            <p>@lang('biodata.title')</p>
            <form>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">@lang('biodata.profil.name')</label>
                    <div class="col-sm-9">    
                        <input type="text" name="" class="form-control">
                    </div>    
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">@lang('biodata.profil.address')</label>
                    <div class="col-sm-9"> 
                        <input type="text" name="" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">@lang('biodata.profil.hobby')</label>
                    <div class="col-sm-9"> 
                        <input type="text" name="" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">@lang('biodata.profil.job')</label>
                    <div class="col-sm-9"> 
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                
                <button type="button" class="btn btn-primary">@lang('biodata.button')</button>
            </form>

            <p>@lang('biodata.thank')</p>
        </div>
    </div>
</div>
</body>
</html>