<div class="col-12 col-md-3">
  <ul class="list-group "> 
    <li class="list-group-item bg-dark" style="color: white; font-weight: bold; font-size: 18px;">
    CATEGORIES</li>
    @foreach($data as $cat)
    <a href="/catp/{{ $cat->id }}" class="list-group-item text-dark">{{ $cat->name }}</a>
    @endforeach
    
  </ul>
</div>
