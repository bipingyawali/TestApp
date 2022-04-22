<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">IP</h2>
                <form action="" method="post">
                    <div class="form-group">
                        {{ $errors }}
                        <label>Name</label>
                        <input type="text" name="ip" class="form-control @error('ip') is-invalid @enderror" value="">
                        @error('ip')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="" class="btn btn-secondary ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
