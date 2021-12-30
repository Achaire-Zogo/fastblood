{{-- @extends('layouts.backend')
@section('content')

    <section class="section">
      <div class="section-body">
        <div class="row">
       
          <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="/dashboard/detaileResponsable/director">
                    @csrf
                <input type="hidden" name="id" value="{{$users['id']}}">
            <div class="card">
              <div class="card-header">
                <h4> view sur les responsables</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" class="form-control" value="{{$users->name}}">
                </div>
                <div class="form-group">
                      <label>email</label>
                      <input type="text" class="form-control" value="{{$users->email}}">
                    </div>
                 <div class="form-group">
                          <label>tel</label>
                          <input type="text" class="form-control" value="{{$users->telephone}}">
                        </div>
                  <div class="form-group">
                              <label>Role</label>
                              <input type="text" class="form-control" value="responsable de la banque de sang">
                            </div>
                         
              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
              </div>
            </div>
           
           
          
        </div>
        </form>
      </div>
    </section>
    <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
      </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
          <div class="setting-panel-header">Setting Panel
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Select Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label class="selectgroup-item">
                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                <span class="selectgroup-button">Light</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                <span class="selectgroup-button">Dark</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Sidebar Color</h6>
            <div class="selectgroup selectgroup-pills sidebar-color">
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Color Theme</h6>
            <div class="theme-setting-options">
              <ul class="choose-theme list-unstyled mb-0">
                <li title="white" class="active">
                  <div class="white"></div>
                </li>
                <li title="cyan">
                  <div class="cyan"></div>
                </li>
                <li title="black">
                  <div class="black"></div>
                </li>
                <li title="purple">
                  <div class="purple"></div>
                </li>
                <li title="orange">
                  <div class="orange"></div>
                </li>
                <li title="green">
                  <div class="green"></div>
                </li>
                <li title="red">
                  <div class="red"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="mini_sidebar_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Mini Sidebar</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="sticky_header_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Sticky Header</span>
              </label>
            </div>
          </div>
          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
              <i class="fas fa-undo"></i> Restore Default
            </a>
          </div>
        </div>
      </div>
    </div>

@endsection --}}
@extends('layouts.backend')
@section('content')
<div class="row">
        <div class="col-12">
            <form method="POST" action="/dashboard/detaileResponsable/director">
              @csrf
              <input type="hidden" name="id" value="{{$users['id']}}">
          <div class="card">
            <div class="card-header">
              <h4>Valider responsable</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"value="{{$users->name}}">
                </div>
              </div>
           
              </div>
              <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">email</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" value="{{$users->email}}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">telephone</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="" value="{{$users->telephone}}">
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">role</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" value="responsable de la banque de sang">
                      </div>
                    </div>
                   
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary" type="reset">cancel</button>
                  <button class="btn btn-primary" type="submit">add</button>
                </div>
              </div>
            </div>
          </div>
            </form>
        </div>
      </div>
      @endsection
