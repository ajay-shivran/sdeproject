It is a browser-based education game to train users to write formal specifications in the form of pre- and post-conditions of a program.

There are two user-roles: _teacher_ and _student_. A teacher can create a class room, and populate it with "problems". Students can register to a class room, and play the problems offered there. Each problem gives an informal description of some program P(x). The student's task is to translate the informal specification to a formal one, expressed as predicate logic formulas. For each problem, a pre- and a post-condition of the program in question must be formulated. For example, such a problem can be:

   * _A program allZero(a) checks if a non-null integer array a consists of only 0 as elements._

This informal specification can be formalized as:

  * Pre-condition: `a != null`
  * Post-condition: `retval = forall(a, i -> a[i]==0)`

However, rather than just trying to puzzle this out with just a pen and paper (boring), FormalZ is a game that will help you to train this skill in a fun way.

Creating rooms and problems, registering to a room and selecting problems to play as mentioned above happen through a web-based application. We can think this as the room and user management part of FormalZ.

Once the student select a problem to 'solve', the game FormalZ will launch inside the student's browser.
It is setup as a 'CPU-defense' game (a la tower defense) where you have to defend a computation unit (we will call it CPU) on a circuit board against hackers' attack. The CPU receives data packages (we will call them sparks) through some conductive tracks, and in turn also output sparks for other components on the board.

The hackers have found a way to unexpectedly corrupt sparks on some conductive tracks: one input track leading into the CPU and one output track leading out from the CPU. Fortunately, the designer of the circuit board has anticipated this kind of malice and has built scanners that can mark corrupted sparks. The scanners themselves cannot eliminate the sparks they mark. For this you need to put extra hardware on the circuit board called defense towers. These towers can neutralize marked sparks to prevent them from reaching the CPU as well as from leaving the CPU to contaminate other critical components. In a harder difficulty level, a single tower may not be enough to shoot down all marked sparks, or even to shoot down a single spark. So, you will need multiple towers to do the job.

