<!DOCTYPE html>
<html>
<body>

<?php 

$str = "surf
surfing surfer
surfer
surf wave
surfboard
surf board
california
vintage beach
beach sunset
beach waves
sea illustration
vintage sunset
coast
sea
beach
palm beach
sunset sea
tropical paradise
sea beach
ocean waves
tropical beach
ocean
paradise
sea wave
palm
beach illustration
tropical palm
typography quotes
sunset
vintage
calligraphy
retro illustration
tropical illustration
vintage letter
sunset illustration
funky
70s
design
poster elements
graphic art
retro poster
modern illustration
funky design
70s retro
vintage cover
vintage abstract
flyer elements
vintage
pattern poster
art design
graphics
cover art
abstract graphics
trendy
template
modern
wallpaper
modern design
modern art
modern graphic
elements
background poster
retro design
psychedelic
graphic background
old design
vintage flyer
retro party
music art
beach logo
personal logo
logo design
logo
logo templates
flat logo
business logo
logo branding
branding
branding identity
flat design
business branding
branding design
business design
business template
identity
branding template
identity design
business identity
template design
template
design
business
personal
business flat
";

$lowerCaseString = strtolower($str);

$str_toa = array_unique(explode(" ", $lowerCaseString));  

echo implode(", ",$str_toa);
 

?>

</body>
</html>
