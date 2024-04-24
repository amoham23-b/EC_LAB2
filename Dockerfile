FROM gcc:latest
COPY hello_world.c .
RUN gcc -o main hello_world.c
CMD ["./main"]