@extends('layouts.app')

@section('title')
    DC - Home
@endsection

@section('main-content')
    <div class="main-wrapper"data-bs-theme="light">
        <div class="container">
            <h2>
              {{$comics[0]['title']}}
            </h2>
            <p>
              {{$comics[0]['description']}}
            </p>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Talent</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Art By:</th>
                  <td><span></span></td>

                </tr>
                <tr>
                  <th scope="row">Written By:</th>
                  <td>Jacob</td>

                </tr>

              </tbody>
            </table>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Talent</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Art By:</th>
                  <td>Mark</td>

                </tr>
                <tr>
                  <th scope="row">Written By:</th>
                  <td>Jacob</td>

                </tr>

              </tbody>
            </table>
            
        </div>
    </div>

@endsection