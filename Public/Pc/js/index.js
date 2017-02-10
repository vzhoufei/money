var oBtn=document.getElementsByClassName('tran-tle')[0].getElementsByTagName('li');
        	
        	var oItem=document.getElementsByClassName('tran-txt')[0].getElementsByTagName('li');
        	
        	for (var i = 0; i < oBtn.length; i++) {
        		oBtn[i].index=i;
        		oBtn[i].onclick=function(){
        			for (var j = 0; j < oItem.length; j++) {
        			oBtn[j].style.color='#9b9a9a';
        			oBtn[j].style.borderBottom='1px solid #e7e7e7'	
                    oItem[j].style.display='none';
                    oBtn[j].style.backgroundColor='#fff';

        			}
        			
        			 oItem[this.index].style.display='block';
        			 oItem[this.index].style.borderTop='1px solid #008bb9';
                      this.style.backgroundColor='#008bb9';
                      this.style.color='#fff';
                      this.style.borderBottom='1px solid rgb(0, 139, 185)';
        		}
        	}