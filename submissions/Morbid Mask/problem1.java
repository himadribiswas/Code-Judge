import java.util.*;
class problem1{
public static void main(String arg[]){
int r,b=0;
System.out.println("Enter an integer number:");
Scanner sc=new Scanner(System.in);
int n=sc.nextInt();
q=n;
while(q!=0){
r=q%10;
int b=b+fact(r);
q=q/10;
}

static int fact(int k){
int f=1;
for(int i=k;i>0;i--){
f=f*i;
}
return f;
}
}
}


