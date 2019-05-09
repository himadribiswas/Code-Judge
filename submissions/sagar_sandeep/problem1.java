import java.util.*;
class problem1
{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        int n=sc.nextInt();
        int m=n,ct=0,c=0,p,b=0;
        while(m>0)
        {
            
            c++;
            m=m/10;
        }
        int l=c;
        while(c>0)
        {
            //m=n%(int)(Math.pow(10,c-1));
            //p=n/(int)(Math.pow(10,c-1));
            //b=p*10+m;
            m=n/10;
            p=n%10;
            b=m+p*(int)(Math.pow(10,l-1));
            if(isprime(b)==1)
            ct++;
            n=b;
            c--;
        }
        if(ct==l)
        System.out.println("CIRCULAR PRIME");
        else
        System.out.println("NOT A CIRCULAR PRIME");
    }
    public static int isprime(int n)
    {
        int i=0,c=0;
        for(i=2;i<n;i++)
        {
            if(n%i==0)
            c++;
        }
        if(c==0)
        return 1;
        else 
        return 0;
    }
}
        
            
         
        
            