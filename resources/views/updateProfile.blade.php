<div>
    <form action="/profileupdate{{ Auth::user()->id }}" methode="post">
<div class="mb-3">
   @csrf
     <label for="exampleInputEmail1" class="form-label">Name</label>
     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Email</label>
     <input type="text" class="form-control" id="exampleInputPassword1" name="email">
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>