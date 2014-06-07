@extends('master')
@section('content')
{{ HTML::style('assets/css/base.css') }}
<div class='dropper-message' style="display:none"> 
	Drop your link anywhere, we will pick it up 
</div> 
<div class="content-nav">
    <div class="pagemarks-header"> Recent Pagemarks </div>
    <div class="addContent">
	    <ul style="list-style: none outside none; margin: 0px; padding: 0px;" class="nav nav-pills">
		    
		    <li class="dropdown">
			    <a href="#" data-toggle="dropdown" class="dropdown-toggle" title="Change Room"><img src="./assets/img/change.png"><span class="caret"></span></a>
			    <ul class="dropdown-menu"> 
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Entertainment</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Miscellaneous</a></li>
			    </ul>
		    </li>
	    </ul>
    </div>
</div>
<div class="input-area">
<div class="datainputoptions "><ul class="uploadlist"><li><a href="#" onfocus="if(this.blur)this.blur()" id="addlink"><img src="./assets/img/addlink.png">Add Link</a></li><li><a href="#" onfocus="if(this.blur)this.blur()" id="addnote"><img src="./assets/img/addnote.png">Add Note</a></li><li><a href="#" onfocus="if(this.blur)this.blur()" id="uploadfile"><img src="./assets/img/uploadfile.png">Upload File</a></li></ul></div>

<div class=" inputareawrapper linkareawrapper " style="display:block">
{{ Form::open(array('url' => 'file','id' => 'urlform')) }}
            
            
            {{ Form::textarea('datalink','',array('placeholder' => 'Paste your url ','class' => 'form-control urltextarea','id' => 'urltext')) }} 
            
            {{ Form::submit('Post', array('class' => 'btn btn-success')) }}
          
            {{ Form::close() }}

            <div class="error"> Invalid url </div>
 </div>

 <div class=" inputareawrapper fileareawrapper" style="display:none">
<form method="POST" action="data" accept-charset="UTF-8" id="urlform"><input type="hidden" name="_token" value="G3o4do7QS3hXTKp2KKfVUmScDO3pDrRFqEDAJsPU">            
            
             <div class="file-upload">
 <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple="">
                </span> <span style="margin-left: 50px; color: gray;"> No files selected</span>
             </div>
                      
            </form>
            
 </div>

</div>
<div class="listing-data">
   <ul class="content-list">
     <li>
       <div class="data-holder">
          <div class="data">
             <img src="./assets/img/room.png" class="data-thumbnail">
             <a href="http://www.thehindu.com" class="data-headline">Headline of the link</a>
             <p class="data-sitename">The hindu</p>
             <p class="data-description">Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Descript ... </p>
             <p class="data-datetime">Monday, 18 Feb 2014, 10:14 am</p>
          </div>
          <div class="extra-data" >
        	 <ul>
        		<li class="share-link"><img src="./assets/img/Share-57.png" title="Share"></li>
	            <li class="discuss-link"><img title="Discussion" src="./assets/img/comment_empty.png"></li>
	            <li class="addnote-link"><img title="Add note" src="./assets/img/onebit_39.png"></li>
	            <li class="addroom-link"><img title="Add to Room" src="./assets/img/room.png" ></li>
	            <li class="ratings-link"><img title="Rate it" src="./assets/img/ratings.png" ></li> 
	         </ul>
	      </div>
       </div>
     </li>

      <li>
       <div class="data-holder">
          <div class="data">
             <img src="./assets/img/room.png" class="data-thumbnail">
             <a href="http://www.thehindu.com" class="data-headline">Headline of the link</a>
             <p class="data-sitename">The hindu</p>
             <p class="data-description">Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Descript ... </p>
             <p class="data-datetime">Monday, 18 Feb 2014, 10:14 am</p>
          </div>
          <div class="extra-data" >
        	 <ul>
        		<li class="share-link"><img src="./assets/img/Share-57.png" title="Share"></li>
	            <li class="discuss-link"><img title="Discussion" src="./assets/img/comment_empty.png"></li>
	            <li class="addnote-link"><img title="Add note" src="./assets/img/onebit_39.png"></li>
	            <li class="addroom-link"><img title="Add to Room" src="./assets/img/room.png" ></li>
	            <li class="ratings-link"><img title="Rate it" src="./assets/img/ratings.png" ></li> 
	         </ul>
	      </div>
       </div>
     </li>
   </ul>
</div>
{{ HTML::script('assets/js/drag-drop.js') }}
@stop