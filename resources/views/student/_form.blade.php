<form class="form-horizontal" method="POST" action="">
    {{-- @csrf 请求要带令牌 --}}
    @csrf
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-5">
            <input 
                type="text" 
                name="Student[name]" 
                value="{{ old('Student')['name'] ? old('Student')['name'] : $student->name }}" {{-- 数据保持 --}}
                class="form-control" 
                id="name" 
                placeholder="请输入学生姓名"
            >
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors -> first('Student.name') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>
        <div class="col-sm-5">
            <input 
                type="text" 
                name="Student[age]" 
                value="{{ old('Student')['age'] ? old('Student')['age'] : $student->age }}"
                class="form-control" 
                id="age" 
                placeholder="请输入学生年龄"
            >
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors -> first('Student.age') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="sex" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-5">
            @foreach ($student->getSex() as $ind=>$val)
            <label class="radio-inline">
                <input 
                    type="radio" 
                    name="Student[sex]" 
                    value="{{ $ind }}"
                    {{ isset($student->sex) && $student->sex == $ind ? 'checked' : '' }}
                >
                {{ $val }}
            </label>
            @endforeach
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors -> first('Student.sex') }}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>