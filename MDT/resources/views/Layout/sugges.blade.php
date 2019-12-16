<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<div class="container">

@foreach ($users as $us)
                                                        <div class="suggestion-usd">
                                                            <img src="images/resources/s1.png" alt="">
                                                            <div class="sgt-text">
                                                            <h4>{{ $us->firstname }}</h4>
                                                            <span>{{ $us->categories->name }}</span>
                                                        </div>
                                                    <span><i class="la la-plus"></i></span>
                                               </div>
                                    		@endforeach
                                            </div>
                                            
</body>
</html>