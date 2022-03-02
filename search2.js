function search()
{
  let input=document.getElementById('search-item').value
  input =input.toLowerCase();
  let x = document.getElementsByClassName('all-card');
  for(i=0;i<x.length; i++)
  {
    if(!x[i].innerHTML.toLocaleLowerCase().includes(input)){
      x[i].style.display = 'none';
    }else{
      x[i].  x[i].style.display = 'none';
    }
}
}