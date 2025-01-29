# Kata DNI (NifCalculator) 
In this project, the objective is to design with [Laravel](https://laravel.com) an application capable of generating via endpoint a letter for an eight-digit numerical string. Emulating the operation of the Spanish identification card (DNI).

## App operation

![Image](https://github.com/user-attachments/assets/960b6c7b-dc94-4378-a346-f9cc0c996c46)
*Correct operation, returns the number entered and the assigned letter*

![Image](https://github.com/user-attachments/assets/7a08bae6-ac16-4a50-a2dc-2f0bc67b7f94)
*Incorrect operation, returns error text*

## Languages ​​and tools  
![](https://skillicons.dev/icons?i=php,laravel,git,github,vscode,)

## Installation prerequisites
Install [Node.js](https://nodejs.org/en/download/source-code)

Install [Composer](https://getcomposer.org/download/)

## Installation Guide 
Before starting to install the project, you will need to create a database (we have used mysql via xampp) and name it: `katadni` 

Open a terminal in the folder where you want the repository to be cloned and enter this command:

`https://github.com/Matias-Stadler/NIFCalculator.git`

As you clone the repository, it will appear all the elements on it; you need to rename the file ".env.example" to ".env" and fill it with theese values:

![Image](https://github.com/user-attachments/assets/2dc94922-fc29-4fce-8565-a456edfba52c)

In your preferred environment, open the project you cloned; you will need three consoles for the next step.

▷Console 1:
    `npm install` `npm run dev`
    
▷Console 2:
    `composer install` `php artisan serve`
    
▷Console 3: 
    `php artisan migrat:fresh`
    `php artisan migrat:fresh --seed`
    
In the second console that you have opened, press the ctrl key and click on the link to localhost that it offers you. It should take you to the main view of the project where the offers are located.

If you have done the previous steps and the view has not opened correctly, go back to the third command console and enter this:

`php artisan key:generate` `php artisan config:cache` 

## Endpoints 
For this project, just one endpoint i needed to do all the functionalities; it's used to introduce the number you want to process; if it's correct it will return your number plus the corresponding letter; if it's not, it will show an error message warning you to introduce a valid number.

### Assingn letter (GET)
`http://127.0.0.1:8000/api/assign/{id}`

*you need to introduce the number where the {id} goes*

## Tests 
All tests passed. Introduce this line on your console to check it:

If you want to launch the tests and view them you can put this command in console:

`php artisan test --coverage` 

  ![Image](https://github.com/user-attachments/assets/af50b06d-bd96-45be-bfc9-8456f4ff06ef)
  
## Jira Backlog 

![Image](https://github.com/user-attachments/assets/af693f35-cbbb-4f5d-b588-f78438c19bf4)
