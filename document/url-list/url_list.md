# URL list:  
    
##  Generic  
  
* `/` => homepage -  
* `/home` => movies (list) -  
* `/search` => search - 
* * `/search?title=abc&genere=action&type=series` => searching parameters
* `/login` => login page -
* * `/login&status=error&msg=Something went wrong` => login not successful plus error message
* `/signup` => signup page -  
* * `/signup?status=error&errtxt=Something went wrong` => proccessing was not successful + message
  
  
## User  
  
* `/payment` => payment page -   
* * `/payment?status=error&errtxt=Something went wrong` => proccessing was not successful + message
* `/user/settings` => user data -  
* * * `/user/settings/proccess?status=success` => proccessing was successful (show success message, wait 0.75 seconds and redirect to home OR just redirect home)
* * * `/user/settings/proccess?status=error&errtxt=Something went wrong` => proccessing was not successful + message
* `/watch` => watching file interface -  
* * `/watch?id=1&season=1&epissode=2` => watch single movie/film
* `/watchlists` => favorite and for you movies page -  
  
  
## Admin  
  
* `/admin/users` => users list for admin -  
* * `/admin/users?id=12` => single user data for admin 
* * * `/admin/users/12?status=success` => update/modify single user data
* * * `/admin/users/12error&errtxt=Something went wrong` => proccessing was not successful + message
* `/admin/movies` => list of all movies -  
* * `/admin/movies/search?title=Titanic&genere=action&director=Steven Spilberg&type=series`
* * * `/admin/movies/add`=> add movie -  
* * * `/admin/movies/add?status=success` => proccessing was successful
* * * `/admin/movies/add?status=error&errtxt=Something went wrong` => proccessing was not successful + message
* * * `/admin/movies/modify?id=12`=> modify movie with ID = 12 -  
* * * `/admin/movies/modify?id=12&status=success` => proccessing was successful
* * * `/admin/movies/modify?id=12&status=error&errtxt=Something went wrong` => proccessing was not successful + message

