<div class="tab-content tabcontent-border" style="width: 100vw;" >
    <div class="tab-pane pad active" id="video{{  $lesson->id }}" role="tabpanel">
        <div class="box">
            <div class="embed-responsive embed-responsive-16by9">
                {!! $lesson->lessonVideo->video_url !!}
            </div>

            <div class="box-body">
            <h4><a href="#">{{$lesson->lessonVideo->description}}</a></h4>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="vocabulary{{  $lesson->id }}" role="tabpanel">
        <div class="pad">
            <table class="table table-hover" width="100%">
                <tr class="table table-dark">
                    <td  width="30%"> Từ vựng</td>
                    <td> Mô tả</td>
                </tr>
                @foreach($lesson->lessonVocabulary as $lessonVocabulary )
                <tr>
                    <td>{{ $lessonVocabulary->vocabulary->name }}</td>
                    <td>{{ $lessonVocabulary->vocabulary->description }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="tab-pane pad" id="grammar{{  $lesson->id }}" role="tabpanel">
        <div class="pad">
            <table class=" table table-hover"  width="100%">
                <tr  class="table table-dark">
                    <td width="30%">Ngữ pháp</td>
                    <td>Mô tả</td>
                </tr>
                @foreach($lesson->lessonGrammar as $lessonGrammar )
                <tr>
                    <td>{{ $lessonGrammar->grammar->name }}</td>
                    <td>{{ $lessonGrammar->grammar->description }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>