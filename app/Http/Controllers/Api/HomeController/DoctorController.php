<?php

namespace App\Http\Controllers\Api\HomeController;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource\Doctor\Show\DoctorResource;
use App\Http\Resources\HomeResource\Doctor\Index\DoctorResource as IndexDoctorResource;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Illuminate\Http\Request;

/**
 * @group DoctorHome
 * 
 * APIs For Doctor In Home Page
 */
class DoctorController extends Controller
{

  /**
   * See All Doctor
   * 
   * @response 200 scenario="Success Process"{
    "data": [
        {
            "Doctor_ID": 1,
            "Doctor_Name": {
                "FirstName": "Mikel",
                "LastName": "Rodriguez"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 24,
            "Doctor_Image": "http://durgan.com/odio-eum-quia-quis-placeat-dolorem-assumenda.html",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 2,
            "Doctor_Name": {
                "FirstName": "Sammy",
                "LastName": "Cassin"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 52,
            "Doctor_Image": "http://volkman.com/",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 3,
            "Doctor_Name": {
                "FirstName": "Joanne",
                "LastName": "Lueilwitz"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 14,
            "Doctor_Image": "http://hane.com/",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 4,
            "Doctor_Name": {
                "FirstName": "Constantin",
                "LastName": "Rippin"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 33,
            "Doctor_Image": "http://www.shields.info/ut-id-minus-eum-vel-assumenda-est-consequatur",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 5,
            "Doctor_Name": {
                "FirstName": "Mollie",
                "LastName": "Mayer"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 10,
            "Doctor_Image": "http://daugherty.com/",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 6,
            "Doctor_Name": {
                "FirstName": "Fernando",
                "LastName": "Herman"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 46,
            "Doctor_Image": "http://mclaughlin.com/ipsum-cum-ad-eius-inventore-dolores-et-ratione",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 7,
            "Doctor_Name": {
                "FirstName": "Valentine",
                "LastName": "Quitzon"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 4,
            "Doctor_Image": "http://www.gibson.biz/veniam-possimus-voluptatem-porro-qui.html",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 8,
            "Doctor_Name": {
                "FirstName": "Chad",
                "LastName": "Bode"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 40,
            "Doctor_Image": "http://hickle.net/",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 9,
            "Doctor_Name": {
                "FirstName": "Gladys",
                "LastName": "Denesik"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 21,
            "Doctor_Image": "http://www.fadel.com/alias-atque-architecto-impedit-quas-minus-tempora.html",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 10,
            "Doctor_Name": {
                "FirstName": "Telly",
                "LastName": "Altenwerth"
            },
            "Doctor_Speciality_And_Donor_Name": [],
            "Doctor Experience": 23,
            "Doctor_Image": "http://www.mcdermott.com/in-labore-sunt-mollitia-velit-aut-voluptatem",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 11,
            "Doctor_Name": {
                "FirstName": "Drew",
                "LastName": "Conroy"
            },
            "Doctor_Speciality_And_Donor_Name": [
                {
                    "Name_Certifications": "hic",
                    "Donor_Certifications": "voluptatem"
                }
            ],
            "Doctor Experience": 36,
            "Doctor_Image": "http://carter.com/",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 12,
            "Doctor_Name": {
                "FirstName": "Horacio",
                "LastName": "Schmitt"
            },
            "Doctor_Speciality_And_Donor_Name": [
                {
                    "Name_Certifications": "aliquam",
                    "Donor_Certifications": "possimus"
                }
            ],
            "Doctor Experience": 18,
            "Doctor_Image": "http://wunsch.com/enim-commodi-qui-accusantium-ducimus",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 13,
            "Doctor_Name": {
                "FirstName": "Idella",
                "LastName": "Abernathy"
            },
            "Doctor_Speciality_And_Donor_Name": [
                {
                    "Name_Certifications": "accusamus",
                    "Donor_Certifications": "autem"
                }
            ],
            "Doctor Experience": 46,
            "Doctor_Image": "http://www.jerde.com/ullam-nihil-id-harum-est",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 14,
            "Doctor_Name": {
                "FirstName": "Christian",
                "LastName": "Boyer"
            },
            "Doctor_Speciality_And_Donor_Name": [
                {
                    "Name_Certifications": "unde",
                    "Donor_Certifications": "quasi"
                }
            ],
            "Doctor Experience": 46,
            "Doctor_Image": "https://will.org/fugit-cupiditate-vitae-iure-quis.html",
            "Doctor_City": null,
            "Doctor_Country": null
        },
        {
            "Doctor_ID": 15,
            "Doctor_Name": {
                "FirstName": "Kenya",
                "LastName": "Kuhlman"
            },
            "Doctor_Speciality_And_Donor_Name": [
                {
                    "Name_Certifications": "ipsa",
                    "Donor_Certifications": "atque"
                }
            ],
            "Doctor Experience": 23,
            "Doctor_Image": "http://price.com/eveniet-perspiciatis-nisi-id",
            "Doctor_City": null,
            "Doctor_Country": null
        }
    ],
    "links": {
        "first": "http://127.0.0.1:8000/api/Doctor?page=1",
        "last": "http://127.0.0.1:8000/api/Doctor?page=10",
        "prev": null,
        "next": "http://127.0.0.1:8000/api/Doctor?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 10,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=6",
                "label": "6",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=7",
                "label": "7",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=8",
                "label": "8",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=9",
                "label": "9",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=10",
                "label": "10",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/Doctor?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://127.0.0.1:8000/api/Doctor",
        "per_page": 15,
        "to": 15,
        "total": 143
    }
}
   * 
   * @queryparam DataCount int 
   * To return limite data in single page.
   * Defaults value for variable '15'.
   */
  public function index($DataCount = 15)
  {

    //$doctors = Employee::whereHas('User',fn($query)=>$query->whereHas('UserType',fn($query)=>$query->where('UserType','Doctor')))->get('FirstName');
    //$doctors = DB::table('employees')->join('users','users.id','=','employees.user_id')->select('users.FirstName')->get();
    // $doctors = DB::table('employees')
    // ->join('users','users.id','=','employees.user_id')
    // ->join('employee_types','employee_types.id','=','employees.EmployeeTypeId')
    // ->where('employee_types.Type','Doctor')
    // ->join('certification_employees','certification_employees.EmployeeID','=','employees.id')
    // ->join('certifications','certification_employees.CertificationID','=','certifications.id')
    // ->select('users.FirstName','certifications.CertificationName','users.City','users.Country','certifications.CertificationDonor',experianceYear(),'users.ProfileImage')
    // ->paginate($DataCount);
    //$doctors = Employee::whereHas('User',fn($query)=>$query->whereHas('UserType',fn($query)=>$query->where('UserType','Doctor')))->get();
    //$doctor=Employee::with('user')->with('certificationEmployee')->get();
    return IndexDoctorResource::collection(Employee::paginate($DataCount));
  }

  /**
   * See One Doctor
   * @response 200 scenario="Success Process"{
    "data": {
        "Doctor_ID": 143,
        "doctor_name": {
            "FirstName": "Ada",
            "LastName": "Marvin"
        },
        "doctor_speciality_and_donor_name": [],
        "doctor experience": 32,
        "doctor_city": null,
        "doctor_country": null,
        "doctor_work_schedule": [
            {
                "from_hour": "12:00 am",
                "to_hour": "12:00 am",
                "day_name": "Wednesday"
            }
        ]
    }
}
   * 
   * @response 404 scenario="This Doctor Not Found"{
    "message": "No query results for model [App\\Models\\Employee] 1444",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 408,
    "trace": [
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 384,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 185,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 152,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 128,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 80,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 180,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 116,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 798,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 775,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 739,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 728,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 200,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 141,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 180,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 180,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 180,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 180,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php",
            "line": 62,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 180,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 180,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 116,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 175,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 144,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\public\\index.php",
            "line": 52,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\EveryThings\\Jawad\\Project\\VisualStudioCode\\Laravel\\HIMS\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\resources\\server.php",
            "line": 16,
            "function": "require_once"
        }
    ]
}
   */
  public function show(Employee $Doctor)
  {
    //$doctors = Employee::whereHas('User',fn($query)=>$query->whereHas('UserType',fn($query)=>$query->where('UserType','Doctor')))->get();
    return new DoctorResource(Employee::whereHas('EmployeeType',fn($query)=>$query->where('Type','Doctor'))->find($Doctor));
    // if($doctors)
    // {
    //   return response(['Doctors'=>$doctors],2S00);
    // }
    // return response(['Doctors'=>$doctors],200);
  }
}
