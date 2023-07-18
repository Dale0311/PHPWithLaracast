# PHPWithLaracast

## creating a simple router for my mvc model

#### 1. create a .htaccess @root level to redirect all request to index
copy n paste this : 
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php?path=$1 [NC,L,QSA]

#### 2. create a routes file that contain all of routes that i'm redirecting
![anonymousFn](https://github.com/Dale0311/PHPWithLaracast/assets/101126064/b0c3d267-6a70-44b1-a01f-d3326b88f5cd)

#### 3. create some logic that require/fetch certain controller if the requested uri is in our routes array.
![2](https://github.com/Dale0311/PHPWithLaracast/assets/101126064/b298f4b7-0d3b-42b2-8e47-979bd948321e)

#### 4. create a controller dir that has our logic before we render the view of that certain controller
![3](https://github.com/Dale0311/PHPWithLaracast/assets/101126064/d3d52660-b42d-49d1-a488-ccf4489da0a3)

#### 5. create a view dir that renders our ui. 
![4](https://github.com/Dale0311/PHPWithLaracast/assets/101126064/36fb1080-0cff-4f9f-bbec-2d3593d3c460)


## and viola 
![image](https://github.com/Dale0311/PHPWithLaracast/assets/101126064/e3bff3ec-c3f1-42ab-921d-0b7ea96e061a)



