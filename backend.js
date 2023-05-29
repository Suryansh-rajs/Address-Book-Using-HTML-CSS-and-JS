const email=document.getElementById('login-email');
                    const password=document.getElementById('login-password');
                    const btn1=document.getElementById('signup-button');
                    const out1=document.getElementById('output1')
                    const out2=document.getElementById('output2')
                    function fun1()
                    {
                        out2.innerHTML=password.value;
                        out1.innerHTML=email.value;
                    }
                    btn1.addEventListener('click',fun1);
            
                
              