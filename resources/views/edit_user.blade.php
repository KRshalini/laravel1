<h3>Update form</h3>

<form action="{{ url('update', $user->id) }}" method="POST">
    @method('PATCH')
    
    <label for="firstname">Firstname:</label>
    <input type="text" id="firstname" name="firstname" value="{{ $user->firstname }}" required><br>
    
    <label for="lastname">Lastname:</label>
    <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    
    <label for="gender">Gender:</label><br>
    <input type="radio" id="female" name="gender" value="Female" @if($user->gender === 'Female') checked @endif>
    <label for="female">Female</label>
    <input type="radio" id="male" name="gender" value="Male" @if($user->gender === 'Male') checked @endif>
    <label for="male">Male</label><br>
    
    <label for="skills">Skills:</label><br>
    <input type="checkbox" id="html" name="skills[]" value="html" {{in_array('html',$skills)? 'checked' :''}}>HTML                                                                                            
    <input type="checkbox" id="css" name="skills[]" value="css" {{in_array('css',$skills)? 'checked' :''}}>CSS
    <input type="checkbox" id="php" name="skills[]" value="php" {{in_array('php',$skills)? 'checked' :''}}>PHP<br><br>

    <label for="native">Native:</label>
    <select name="native" id="native">
        <option value="madurai" @if($user->native === 'madurai') selected @endif>Madurai</option>
        <option value="chennai" @if($user->native === 'chennai') selected @endif>Chennai</option>
        <option value="tirchy" @if($user->native === 'tirchy') selected @endif>Tirchy</option>
    </select><br>

    <select name="location[]" id="location" multiple required>
    @foreach(['Trichy', 'Madurai', 'Coimbatore', 'Bangalore', 'Chennai'] as $location)
        <option value="{{ $location }}" @if(is_array($user->location) && in_array($location, $user->location)) selected @endif>{{ $location }}</option>
    @endforeach
    </select><br>


   

    <input type="submit" value="Update User">
    @csrf
</form>
