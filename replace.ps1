$path = 'd:\themaxwebsite\wp-content\themes\themax\js\index.js'
$content = Get-Content -Path $path -Raw
$content = $content -replace 'const threshold = isMobile \? 20 : this\.height \* 3;\s*if \(inst\.scroll < threshold\)', "const threshold = isMobile ? 0 : this.height * 3;`n            if (inst.scroll <= threshold)"
Set-Content -Path $path -Value $content -NoNewline
Write-Host "Updated index.js"
