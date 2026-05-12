<div>
    <div class="div">
        <h1>HOME</h1>
     <h1>
    
     </h1>
    <a href="{{route('con')}}">contact</a>
     <h3>
            <!-- shows just url  -->
   {{URL::current()}} 
   <br>
   {{url()->current()}}
        </h3>
        <h3>
            <!-- shows full url with parameter -->
            {{URL::full()}}
              <br>
            {{url()->full()}}
        </h3>
        <!-- //passing parameter in url manually -->
<a href="{{URL::to('about', ['urooj'])}}">about</a>
    </div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->

</div>
