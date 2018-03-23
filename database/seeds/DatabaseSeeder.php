<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              
          DB::table('employees')->insert([
                'efname' => 'Persida',
                'emname' => 'Rueda',
                'elname' => 'Acosta',
                'email'  => 'pra@gmail.com',
                'password' => bcrypt('password'),
                'contact' => '09123456789',
                'position' => 'Administrative Staff',

            ]);
   
         DB::table('citizenships')->insert([
            'name' => 'Filipino',
             
             ]);
             
             DB::table('citizenships')->insert([
            'name' => 'American',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'Japanese',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'Brazilian',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'African',
             
             ]);
             
             
             
             DB::table('citizenships')->insert([
            'name' => 'Dutch',
             
             ]);    
            
             DB::table('citizenships')->insert([
            'name' => 'Malaysian',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'British',
                 
             ]);    
                 
             DB::table('citizenships')->insert([
            'name' => 'Colombian',
             
             ]);    
             
             DB::table('citizenships')->insert([
            'name' => 'Dominican',
             
             ]);   
      
        
             
        
   
            DB::table('casetypes')->insert([
            'name' => 'Criminal',
             
             ]);
             
             DB::table('casetypes')->insert([
            'name' => 'Civil',
             
             ]);
             
             DB::table('casetypes')->insert([
            'name' => 'Labor',
             
             ]);
                 
             DB::table('casetypes')->insert([
            'name' => 'Administrative',
             
             ]);
                  
             DB::table('casetypes')->insert([
            'name' => 'Appeal',
             
             ]);

             DB::table('lawsuits')->insert([
            'name' => 'Bribery',
            'casetype_id' => '1',
            
      
             ]);
             DB::table('lawsuits')->insert([
            'name' => 'Child Abuse',
            'casetype_id' => '1',
           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Child Pornography',
            'casetype_id' => '1',
          
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Cyber Bullying',
            'casetype_id' => '1',
         
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Forgery',
            'casetype_id' => '4',
            
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Fraud',
            'casetype_id' => '4',
            
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Harassment',
            'casetype_id' => '3' ,
           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Homicide',
            'casetype_id' => '1',
           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Libel',
            'casetype_id' => '2',

           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Unpaid Overtime and Meal and Rest Breaks (telephone retail sales)',
            'casetype_id' => '3',
         
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Plagiarism',
            'casetype_id' => '2',
            
      
             ]);
  
         DB::table('categories')->insert([
            'name' => 'VAWC',
             
           ]);
             
         DB::table('categories')->insert([
            'name' => 'CICL',
             
           ]);
             
         DB::table('categories')->insert([
            'name' => 'Human Security Act',
             
           ]);
             
         DB::table('categories')->insert([
            'name' => 'Anti-Torture Law',
             
           ]);  
             
         DB::table('categories')->insert([
            'name' => 'Agrarian Case',
             
           ]);    
        

         DB::table('education')->insert([
            'name' => 'Elementary'
         
      
             ]);
             
             DB::table('education')->insert([
            'name' => 'High School'
          
      
             ]);
             
             DB::table('education')->insert([
            'name' => 'College'
            
              
             ]);
             
             DB::table('education')->insert([
            'name' => 'Graduate'
             ]);
             
            
        

   
         DB::table('involvements')->insert([
            'name' => 'Plaintiff',
             
             ]);
             
          DB::table('involvements')->insert([
            'name' => 'Petitioner',
             
             ]); 
              
           DB::table('involvements')->insert([
            'name' => 'Defendant',
             
             ]);
               
            DB::table('involvements')->insert([
            'name' => 'Respondent',
             
             ]);  
                
            DB::table('involvements')->insert([
            'name' => 'Oppositor',
             
             ]);  
                
             DB::table('involvements')->insert([
            'name' => 'Accused',
             
             ]);     

      
         DB::table('languages')->insert([
            'name' => 'Tagalog'
           
            
            ]);
            
             DB::table('languages')->insert([
            'name' => 'English'
         
            
            ]);
            
            DB::table('languages')->insert([
            'name' => 'Mandarin'
          
            
            ]);
            
            DB::table('languages')->insert([
            'name' => 'Russian'
          
            
            ]);
            
            DB::table('languages')->insert([
            'name' => 'Spanish'
         
            
            ]);
   
         DB::table('positions')->insert([
            'name' => 'Lawyer',
             
             ]);
             
          DB::table('positions')->insert([
            'name' => 'Administrative Staff',
             
             ]);   
            
       DB::table('services')->insert([
            'name' => 'Legal Advice',
             
            ]);
             
            DB::table('services')->insert([
            'name' => 'Legal Assistance',
             
            ]);
               
            DB::table('services')->insert([
            'name' => 'Legal Documentation',
             
            ]);
                
            DB::table('services')->insert([
            'name' => 'Administration of oath',
             
            ]); 

            DB::table('services')->insert([
            'name' => 'Mediation',
             
            ]); 
                
            DB::table('services')->insert([
            'name' => 'Representation of quasi-judicial bodies',
             
            ]);     
    
         DB::table('statuses')->insert([
            'name' => 'Arraignment',
             
             ]);
             
             DB::table('statuses')->insert([
            'name' => 'Preliminary Conference',
             
             ]);
                 
             DB::table('statuses')->insert([
            'name' => 'Pre-trial',
             
             ]);
                 
             DB::table('statuses')->insert([
            'name' => 'Initial Trial',
             
             ]); 
                 
             DB::table('statuses')->insert([
            'name' => 'Trial Proper(Prosecution Evidence)',
             
             ]);
                 
             DB::table('statuses')->insert([
            'name' => 'Trial Proper(Defense Evidence)',
             
             ]);

               DB::table('statuses')->insert([
            'name' => 'Promulgation',
             
             ]);    
             
             
   
         DB::table('religions')->insert([
            'name' => 'Roman Catholic'
             
            
            ]);
            
            DB::table('religions')->insert([
            'name' => 'Seventh-day adventist'
            
            
            ]);
            
            DB::table('religions')->insert([
            'name' => 'Buddhism'
             
            
            ]);
                
            DB::table('religions')->insert([
            'name' => 'islam'
             
            
            ]);
                
            DB::table('religions')->insert([
            'name' => 'Hinduism'
         
            
            ]);
         



        DB::table('courttypes')->insert([
            'name' => 'Drugs court',
             
             ]);
             
             DB::table('courttypes')->insert([
            'name' => 'Family court',
             
             ]);
             
             DB::table('courttypes')->insert([
            'name' => 'Commercial court',
             
             ]);
                 
             DB::table('courttypes')->insert([
            'name' => 'Regular court',
             
             ]);

             DB::table('courttypes')->insert([
            'name' => 'Trial court',
             
             ]);

              DB::table('courttypes')->insert([
            'name' => 'Special court',
             
             ]);



        DB::table('decisions')->insert([
            'name' => 'Conviction',
             
             ]);
             
             DB::table('decisions')->insert([
            'name' => 'Acquittal',
             
             ]);
             
             DB::table('decisions')->insert([
            'name' => 'Dismissed',
             
             ]);


         DB::table('requeststats')->insert([
            'name' => 'On Process',
             
             ]);
             
             DB::table('requeststats')->insert([
            'name' => 'Pending',
             
             ]);
             
             DB::table('requeststats')->insert([
            'name' => 'Finished',
            ]);

             DB::table('requeststats')->insert([
            'name' => 'Dismissed',
             
             ]);


        DB::table('scheduletypes')->insert([
            'name' => 'Jail Visitation',
             
             ]);
             
             DB::table('scheduletypes')->insert([
            'name' => 'Hearing',
             
             ]);


         DB::table('branches')->insert([
            'name' => 'QC BRANCH 90',
             
             ]);
             
             DB::table('branches')->insert([
            'name' => 'QC BRANCH 92',
             
             ]);

             DB::table('branches')->insert([
            'name' => 'QC BRANCH 94',
             
             ]);

             DB::table('branches')->insert([
            'name' => 'QC BRANCH 96',
             
             ]);

             DB::table('branches')->insert([
            'name' => 'QC BRANCH 98',
             
             ]);

             DB::table('courts')->insert([
            'name' => 'MTC(Metropolitan Trial Court)',
            'branch' => 'QC BRANCH 98',
            'court_type' => 'Trial Court',
             ]);

             DB::table('courts')->insert([
            'name' => 'RTC(Regional Trial Court)',
            'branch' => 'QC BRANCH 96',
            'court_type' => 'Trial Court',
             ]);

            DB::table('courts')->insert([
            'name' => 'Sandiganbayan',
            'branch' => 'QC BRANCH 94',
            'court_type' => 'Special Court',
             ]);

            DB::table('employees')->insert([
                'efname' => 'Angela',
                'emname' => '',
                'elname' => 'Cabuenos',
                'email'  => 'asc@gmail.com',
                'password' => bcrypt('password'),
                'contact' => '09123456789',
                'position' => 'Lawyer',
                'court_id' => '1',

            ]);

            DB::table('employees')->insert([
                'efname' => 'Monica Kim',
                'emname' => '',
                'elname' => 'Fortea',
                'email'  => 'mkf@gmail.com',
                'password' => bcrypt('password'),
                'contact' => '09123456789',
                'position' => 'Lawyer',
                'court_id' => '2',

            ]);

             DB::table('employees')->insert([
                'efname' => 'Mairin',
                'emname' => '',
                'elname' => 'Manansala',
                'email'  => 'mm@gmail.com',
                'password' => bcrypt('password'),
                'contact' => '09123456789',
                'position' => 'Lawyer',
                'court_id' => '3',

            ]);









         DB::table('reasons')->insert([
            'name' => 'Conflict of interest',
             
             ]);
             
             DB::table('reasons')->insert([
            'name' => 'Acceptance of case on provisional basis only',
             
             ]);

             DB::table('reasons')->insert([
            'name' => 'Public attorneys do not act as Public or State Prosecutors in criminal cases
             before court proceedings',
             
             ]);

             DB::table('reasons')->insert([
            'name' => 'You have engaged the services of another counsel and there is no withdrawal of
              appearance',

             
             ]);
             DB::table('documenttypes')->insert([
                'name' => 'Affidavit'
                ]);
             DB::table('documenttypes')->insert([
                'name' => 'Motion'
                ]);
             DB::table('documenttypes')->insert([
                'name' => 'Pleading'
                ]);
             DB::table('documenttypes')->insert([
                'name' => 'Petition'
                ]);
                     
        }


    
}
