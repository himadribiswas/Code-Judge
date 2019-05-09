import java.io.*;
import java.util.*;
class problem1
{public static void main(String args[])
    {Scanner sc=new Scanner(System.in);
   //     System.out.println("enter the number");
       String g1=sc.nextLine();
        int t=Integer.parseInt(g1);
        int k=problem1.prime(t);
        String w=g1;
        w.trim();
        int f=0;
        String w1="";
        int l=g1.length();
        int m=l-1;
        while(m>0)
        {
        for(int i=1;i<l;i++)
        {char x=w.charAt(i);
            w1=w1+x;
        }
        w1=w1+w.charAt(0);
        int r=Integer.parseInt(w1);
        int k1=problem1.prime(r);
        if(k1==1)
        {f=1;
        }
        m=m-1;

        w="";
        w=w1;
        w1="";
    }
    if((k==1)&&(f==1))
    {System.out.println("CIRCULAR PRIME");
    }
    else
    {System.out.println("NOT CIRCULAR PRIME");
    }
}
public static int prime(int x)
{int p=0;
    for(int i=1;i<=x;i++)
    { if(x%i==0)
        p=p+1;
    }
    if(p==2)
    return 1;
    else
    return 0;
}}

            