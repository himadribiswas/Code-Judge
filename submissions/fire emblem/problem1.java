import java.io.*;
import java.util.*;
class problem1
{public static void main(String args[])
{Scanner sc=new Scanner(System.in);
int a=sc.nextInt();
int t=a;
int f,s,k;
s=0;
while(t>0)
{f=t%10;
k=problem1.fact(f);
s=s+k;
t=t/10;
}
if(s==a)
{System.out.println("Yes");
}
else
{System.out.println("No");
}
}
public static int fact(int l)
{int f=1;
for(int i=1;i<=l;i++)
{f=f*i;
}
return f;
}
}