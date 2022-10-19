<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Hobby;
use App\Models\Skill;

class ContactController extends Controller {

// Вывод списка о контактах из БД //
    public function allContact(){
      $contact = new Contact;
      return view('list', ['data' => $contact->get()->all()]);
    }

// Вывод тольок определенного когтакта из списка
    public function oneContact($id)
    {
      $contact = Contact::find($id);
      $hobby = new Hobby;
      $skill = new Skill;
      return view('contact', ['data' => $contact,
                              'hobby'=> $hobby->get()->where('contact_id','==', $id),
                              'skill'=> $skill->get()->where('contact_id','==', $id)]);
    }

// Функции по удалению данных хобби или умениях //
    public function deleteHobby($id){
      $del = Hobby::find($id)->delete();
      return redirect()->back();
    }

    public function deleteSkill($id){
      Skill::find($id)->delete();
      return redirect()->back();
    }
// Изменение данных уменний контакта //
    public function updateHobby($id){
      $hobby = new Hobby;
      return view('redacted-hobby', ['data' => $hobby->get()->find($id)]);
    }

    public function updateHobbyform($id, Request $req){
      $hobby = Hobby::find($id);
      $hobby->title = $req->input('name');
      $hobby->note = $req->input('note');
      $hobby->save();
      return redirect()->back()->with('success', 'Данные обновлены');
    }

// Изменение данных уменний контакта
    public function updateSkill($id){
      $skill = new Skill;
      return view('redacted-skill', ['data' => $skill->get()->find($id)]);
    }

    public function updateSkillform($id, Request $req){
      $skill = Skill::find($id);
      $skill->title_skill = $req->input('title_skill');
      $skill->level = $req->input('level');
      $skill->note = $req->input('note');
      $skill->save();
      return redirect()->back()->with('success', 'Данные обновлены');
    }
}
