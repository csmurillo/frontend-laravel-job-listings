<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/jobs', function(Request $request) {
  $filterParams=explode(',',$request->filters);
  $jobs=[
    [
      "id"=> 1,
      "company"=> "Photosnap",
      "logo"=> "./images/photosnap.svg",
      "new"=> true,
      "featured"=> true,
      "position"=> "Senior Frontend Developer",
      "role"=> "Frontend",
      "level"=> "Senior",
      "postedAt"=> "1d ago",
      "contract"=> "Full Time",
      "location"=> "USA Only",
      "languages"=> ["HTML", "CSS", "JavaScript"],
      "tools"=> []
    ],
    [
      "id"=> 2,
      "company"=> "Manage",
      "logo"=> "./images/manage.svg",
      "new"=> true,
      "featured"=> true,
      "position"=> "Fullstack Developer",
      "role"=> "Fullstack",
      "level"=> "Midweight",
      "postedAt"=> "1d ago",
      "contract"=> "Part Time",
      "location"=> "Remote",
      "languages"=> ["Python"],
      "tools"=> ["React"]
    ],
    [
      "id"=> 3,
      "company"=> "Account",
      "logo"=> "./images/account.svg",
      "new"=> true,
      "featured"=> false,
      "position"=> "Junior Frontend Developer",
      "role"=> "Frontend",
      "level"=> "Junior",
      "postedAt"=> "2d ago",
      "contract"=> "Part Time",
      "location"=> "USA Only",
      "languages"=> ["JavaScript"],
      "tools"=> ["React", "Sass"]
    ],
    [
      "id"=> 4,
      "company"=> "MyHome",
      "logo"=> "./images/myhome.svg",
      "new"=> false,
      "featured"=> false,
      "position"=> "Junior Frontend Developer",
      "role"=> "Frontend",
      "level"=> "Junior",
      "postedAt"=> "5d ago",
      "contract"=> "Contract",
      "location"=> "USA Only",
      "languages"=> ["CSS", "JavaScript"],
      "tools"=> []
    ],
    [
      "id"=> 5,
      "company"=> "Loop Studios",
      "logo"=> "./images/loop-studios.svg",
      "new"=> false,
      "featured"=> false,
      "position"=> "Software Engineer",
      "role"=> "Fullstack",
      "level"=> "Midweight",
      "postedAt"=> "1w ago",
      "contract"=> "Full Time",
      "location"=> "Worldwide",
      "languages"=> ["JavaScript"],
      "tools"=> ["Ruby", "Sass"]
    ],
    [
      "id"=> 6,
      "company"=> "FaceIt",
      "logo"=> "./images/faceit.svg",
      "new"=> false,
      "featured"=> false,
      "position"=> "Junior Backend Developer",
      "role"=> "Backend",
      "level"=> "Junior",
      "postedAt"=> "2w ago",
      "contract"=> "Full Time",
      "location"=> "UK Only",
      "languages"=> ["Ruby"],
      "tools"=> ["RoR"]
    ],
    [
      "id"=> 7,
      "company"=> "Shortly",
      "logo"=> "./images/shortly.svg",
      "new"=> false,
      "featured"=> false,
      "position"=> "Junior Developer",
      "role"=> "Frontend",
      "level"=> "Junior",
      "postedAt"=> "2w ago",
      "contract"=> "Full Time",
      "location"=> "Worldwide",
      "languages"=> ["HTML", "JavaScript"],
      "tools"=> ["Sass"]
    ],
    [
      "id"=> 8,
      "company"=> "Insure",
      "logo"=> "./images/insure.svg",
      "new"=> false,
      "featured"=> false,
      "position"=> "Junior Frontend Developer",
      "role"=> "Frontend",
      "level"=> "Junior",
      "postedAt"=> "2w ago",
      "contract"=> "Full Time",
      "location"=> "USA Only",
      "languages"=> ["JavaScript"],
      "tools"=> ["Vue", "Sass"]
    ],
    [
      "id"=> 9,
      "company"=> "Eyecam Co.",
      "logo"=> "./images/eyecam-co.svg",
      "new"=> false,
      "featured"=> false,
      "position"=> "Full Stack Engineer",
      "role"=> "Fullstack",
      "level"=> "Midweight",
      "postedAt"=> "3w ago",
      "contract"=> "Full Time",
      "location"=> "Worldwide",
      "languages"=> ["JavaScript", "Python"],
      "tools"=> ["Django"]
    ],
    [
      "id"=> 10,
      "company"=> "The Air Filter Company",
      "logo"=> "./images/the-air-filter-company.svg",
      "new"=> false,
      "featured"=> false,
      "position"=> "Front-end Dev",
      "role"=> "Frontend",
      "level"=> "Junior",
      "postedAt"=> "1mo ago",
      "contract"=> "Part Time",
      "location"=> "Worldwide",
      "languages"=> ["JavaScript"],
      "tools"=> ["React", "Sass"]
    ]
  ];  

  $filteredJobs=[];
  foreach ($jobs as $job) {
    $filtersLength=count($filterParams);
    $filterFound=0;
    foreach ($filterParams as $filter) {
      if(strtolower($filter)==strtolower($job['role'])) {
        $filterFound=$filterFound+1;
      }
      else{
        foreach($job['languages'] as $language){
          if(strtolower($filter)==strtolower($language)) {
            $filterFound=$filterFound+1;
            break;
          }
        }  
        foreach($job['tools'] as $tool){
          if(strtolower($filter)==strtolower($tool)) {
            $filterFound=$filterFound+1;
            break;
          }
        }
      }
    }
    if($filtersLength==$filterFound) {
      array_push($filteredJobs,$job);
    }
  }

  if(count($filteredJobs)>0){
    return $filteredJobs;
  }
  else if(count($filterParams)==1){
    return $jobs;
  }
  else{
    return [];
  }
 
});





