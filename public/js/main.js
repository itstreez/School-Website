const students = document.getElementById('students');
if(students){
    students.addEventListener('click' , (event) => {
       if(event.target.className === 'btn btn-danger delete-student'){
          if(confirm('Are you sure ?')){
              const id = event.target.getAttribute('data-id');
            
             fetch (`student/delete/${id}`,{
                 method: 'DELETE'
             }).then(res => window.location.reload());
          }

       }

    });
}

const courses= document.getElementById('courses');
if(courses){
    courses.addEventListener('click' , (e) => {
       if(e.target.className === 'btn btn-danger delete-courses'){
          if(confirm('Are you sure ?')){
              const id = e.target.getAttribute('data-id');
              
            
             fetch (`course/delete/${id}`,{
                 method: 'DELETE'
             }).then(res => window.location.reload());
          }

       }

    });
}

const classes= document.getElementById('classes');
if(classes){
    classes.addEventListener('click' , (e) => {
       if(e.target.className === 'btn btn-danger delete-classes'){
          if(confirm('Are you sure ?')){
              const id = e.target.getAttribute('data-id');
              
            
             fetch (`classes/delete/${id}`,{
                 method: 'DELETE'
             }).then(res => window.location.reload());
          }

       }

    });
}