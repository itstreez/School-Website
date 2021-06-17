<?php

namespace App\Controller;
use App\Entity\Students;
use App\Entity\Courses;
use App\Entity\Classes;
use App\Form\ClassesForm;
use App\Form\CoursesForm;
use App\Form\StudentsForm;
use App\Repository\ClassesRepository;
use App\Repository\CoursesRepository;
use App\Repository\StudentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class ControllerBeastController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */ 
    public function home(){
        return $this->render('controller_beast/homepage.html.twig');
    }
    /**
     * @Route("/add/classes", name="add-classes")
     */
    public function addClasses(EntityManagerInterface $em , Request $request){
        $form = $this -> createForm(ClassesForm::class);

        $form->handleRequest($request);
        if($form-> isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $class = new Classes();
             $class-> setSection($data['section']);
            

             $em->persist($class);
             $em->flush();
             $this->addFlash('success' , 'Class Succesfully Added') ;
             return $this->redirectToRoute('home');
        }
        




        return $this->render('classes/addClasses.html.twig' , [
            'classesForm' => $form->createView()
        ]);
    }
     /**
     * @Route("/list/classes", name="list-classes")
     */
    public function listClasses( ClassesRepository $cr){

        $classes = $cr->findAll();
        return $this->render('classes/listClasses.html.twig' , [
            'classes' => $classes 
        ]);
    }

/**
     * @Route("/add/students", name="add-students")
     */

    public function addStudents(EntityManagerInterface $em , Request $request){
        $form = $this -> createForm(StudentsForm::class);
        $form->handleRequest($request);
        if($form-> isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $student = new Students();
             $student-> setName($data['Name']);
             $student->setAge($data['Age']);

             $em->persist($student);
             $em->flush();
             $this->addFlash('success' , 'Student Succesfully Added') ;
             return $this->redirectToRoute('home');
        }
        return $this->render('students/addStudents.html.twig' ,[
            'studentsForm' => $form->createView()
        ]);
    }
     /**
     * @Route("/list/students", name="list-students")
     */
    public function listStudents(StudentsRepository $cr){
        $students = $cr->findAll();


        return $this->render('students/listStudents.html.twig',[
            'students' => $students
        ]);
    }

     /**
     * @Route("/add/courses", name="add-courses")
     */
    public function addCourses(EntityManagerInterface $em , Request $request){
        $form = $this -> createForm(CoursesForm::class);
        $form->handleRequest($request);
        if($form-> isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $course = new Courses();
             $course-> setCourseName($data['name']);
           

             $em->persist($course);
             $em->flush();
             $this->addFlash('success' , 'Course Succesfully Added') ;
             return $this->redirectToRoute('home');
        }



        return $this->render('courses/addCourses.html.twig' ,
    [    'coursesForm' => $form->createView() ]);
    }
     /**
     * @Route("/list/courses", name="list-courses")
     */
    public function listCourses(CoursesRepository $cr){
        $courses= $cr->findAll();
        return $this->render('courses/listCourses.html.twig' , [
            'courses' => $courses
        ]);
    }
    /**
     * @Route("student/delete/{id}" , name="delete" , methods={"DELETE"})
     
     */
    public function deleteS(EntityManagerInterface $em , $id ){
        $student = $this->getDoctrine()->getRepository(StudentsRepository::class)->find($id);
        
        $em= $this->getDoctrine()->getManager();
        $em->remove($student);
        $em->flush();

        $response = new Response();
        $response ->send();

    } 
    /**
     * @Route("course/delete/{id}" , name="delete-course" , methods={"DELETE"})
     
     */
    public function deleteC(EntityManagerInterface $em , $id ){
        $c = $this->getDoctrine()->getRepository(CoursesRepository::class)->find($id);
        
        $em= $this->getDoctrine()->getManager();
        $em->remove($c);
        $em->flush();

        $response = new Response();
        $response ->send();

    } 


       /**
     * @Route("/student/{id}/edit", name="student_edit")
     */
    public function edit(Students $student, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(StudentsForm::class, $student);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirectToRoute('student_edit', [
                'id' => $student->getId(),
            ]);
        }
        return $this->render('students/edit.html.twig', [
            'stedit' => $form->createView()
        ]);
    }

    /**
     * @Route("/classes/{id}/edit", name="classes_edit")
     */
    public function editClasses(Classes $class, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(ClassesForm::class, $class);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirectToRoute('class_edit', [
                'id' => $class->getId(),
            ]);
        }
        return $this->render('classes/edit.html.twig', [
            'cledit' => $form->createView()
        ]);
    }

     /**
     * @Route("classes/delete/{id}" , name="delete-classes" , methods={"DELETE"})
     
     */
    public function deleteClasses(EntityManagerInterface $em , $id ){
        $c = $this->getDoctrine()->getRepository(ClassesRepository::class)->find($id);
        
        $em= $this->getDoctrine()->getManager();
        $em->remove($c);
        $em->flush();

        $response = new Response();
        $response ->send();

    } 
    
    
}
